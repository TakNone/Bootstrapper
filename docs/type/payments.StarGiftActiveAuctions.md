# payments.StarGiftActiveAuctions

**Description** : *List of currently active gift auctions &raquo; where the user has placed a bid, or an indication that the locally cached list hasn&#039;t changed*

**Layer** : 229

```tl
payments.starGiftActiveAuctionsNotModified#db33dad0 = payments.StarGiftActiveAuctions;
payments.starGiftActiveAuctions#aef6abbc auctions:Vector<StarGiftActiveAuctionState> users:Vector<User> chats:Vector<Chat> = payments.StarGiftActiveAuctions;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**payments.starGiftActiveAuctionsNotModified**](constructor/payments.starGiftActiveAuctionsNotModified) | The list of currently active gift auctions where the user has placed a bid hasn't changed |
| [**payments.starGiftActiveAuctions**](constructor/payments.starGiftActiveAuctions) | Describes all currently active gift auctions where the user has placed a bid |