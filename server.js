const express = require("express");
const app = express();
const PORT = 3000;

// Sample Bible verses data
const verses = [
  { verse: "John 3:16", text: "For God so loved the world that he gave his one and only Son..." },
  { verse: "Psalm 23:1", text: "The Lord is my shepherd; I shall not want." },
  { verse: "Philippians 4:13", text: "I can do all things through Christ who strengthens me." },
  { verse: "Romans 8:28", text: "And we know that in all things God works for the good of those who love him..." }
];

// Default route
app.get("/", (req, res) => {
  res.json({ message: "Welcome to the Bible Verse API" });
});

// Random verse endpoint
app.get("/random", (req, res) => {
  const random = verses[Math.floor(Math.random() * verses.length)];
  res.json(random);
});

// Daily verse endpoint (example: always returns first verse for now)
app.get("/daily", (req, res) => {
  res.json(verses[0]);
});

// Search verse by keyword
app.get("/search/:keyword", (req, res) => {
  const keyword = req.params.keyword.toLowerCase();
  const results = verses.filter(v => v.text.toLowerCase().includes(keyword));
  res.json(results.length ? results : { message: "No verses found." });
});

app.listen(PORT, () => {
  console.log(`Bible Verse API running at http://localhost:${PORT}`);
});
