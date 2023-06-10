jQuery(document).ready(function($) {
    $( "#birthday" ).datepicker();
});

    var language = [
        "C++",
        "C#",
        "Java",
        "Python",
        "JavaScript",
        "PHP",
        "Ruby",
        "Perl",
        "Swift",
        "Go",
        "Rust",
        "Scala",
        "Kotlin",
        "TypeScript",
        "Visual Basic",
        "Objective-C",
        "Assembly",
        "MATLAB",
        "Delphi",
        "PL/SQL",
        "Dart",
        "Haskell",
        "ABAP",
        "Groovy",
        "Fortran",
        "R",
        "COBOL",
        "Lisp",
        "Transact-SQL",
        "PowerShell",
        "F#",
        "Prolog",
        "Asp"
    ];

    jQuery(document).ready(function($) {
    $( "#language" ).autocomplete({
        source: language
    });
});