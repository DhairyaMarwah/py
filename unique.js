function getUniqueCharacters(str1, str2) {
    const combinedStr = str1 + str2; // Concatenate both strings
    const charCount = {}; // Object to store character counts
  
    // Count the occurrences of each character in the combined string
    for (let i = 0; i < combinedStr.length; i++) {
      const char = combinedStr[i];
      charCount[char] = (charCount[char] || 0) + 1;
    }
  
    // Filter out characters with count greater than 1
    const uniqueChars = Object.keys(charCount).filter(char => charCount[char] === 1);
  
    return uniqueChars;
  }
  
  // Example usage
  const str1 = "abcdef";
  const str2 = "defghijk";
  const uniqueChars = getUniqueCharacters(str1, str2);
  console.log("Unique characters:", uniqueChars);
  