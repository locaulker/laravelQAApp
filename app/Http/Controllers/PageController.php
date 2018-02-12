<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
  public function about() {
    return "This is the ABOUT US Page";
  }

  public function contact() {
    return "This is the CONTACT US Page";
  }

  public function submitContact() {
    return "Submitted CONTACT US Form";
  }

}
