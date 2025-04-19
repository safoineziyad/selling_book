package main

import (
	"fmt"
	"log"
	"net/http"
)

func main() {
  fs := http.FileServer(http.Dir("../book_galaxy/"))
  http.Handle("/", fs)

  fmt.Println("Listening on Port :8080")
  err := http.ListenAndServe(":8080", nil)
  if err != nil {
    log.Fatal(err)
  }
}
