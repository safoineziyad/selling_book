package main

import (
	"fmt"
	"log"
	"net/http"
	"os/exec"
)

func main() {
	cmd := exec.Command("php", "-S", "localhost:9000")

	fmt.Println("running PHP server...")

	err := cmd.Start()
	if err != nil {
		log.Fatal(err)
	}

  fs := http.FileServer(http.Dir("../book_galaxy/"))
  http.Handle("/", fs)

  fmt.Println("Listening on Port :8080")
  err = http.ListenAndServe(":8080", nil)
  if err != nil {
    log.Fatal(err)
  }
}
