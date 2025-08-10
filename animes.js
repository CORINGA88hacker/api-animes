const animes = [
  {
    id: "01",
    nome: "One Piece",
    data: "1999-10-20",
    avaliacao: 8.8,
    capa: "https://upload.wikimedia.org/wikipedia/en/6/65/One_Piece_Logo.png"
  },
  {
    id: "02",
    nome: "Naruto",
    data: "2002-10-03",
    avaliacao: 8.1,
    capa: "https://upload.wikimedia.org/wikipedia/en/9/94/NarutoCoverTankobon1.jpg"
  },
  // ... os outros animes
  {
    id: "12",
    nome: "Lord of Mysteries",
    data: "2025-06-28",
    avaliacao: 8.7,
    capa: "https://image.tmdb.org/t/p/w600_and_h900_bestv2/c8fHePq3yTn3WvZd4hupkHwsjm5.jpg"
  },
];

export default function handler(req, res) {
  res.status(200).json(animes);
}
