String.prototype.charCodeAt();

const firstWord = (process.argv[2]).toLowerCase();
const secondWord = (process.argv[3]).toLowerCase();

const firstASCII = firstWord.charCodeAt(0);
const secondASCII = secondWord.charCodeAt(0);

if (firstASCII < secondASCII) {
console.log("-1");
} else if (firstASCII == secondASCII) {
console.log("0");
} else {
console.log("1");
}
