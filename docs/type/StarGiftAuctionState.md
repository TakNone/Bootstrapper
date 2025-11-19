# StarGiftAuctionState

**Layer** : 218

```tl
starGiftAuctionState#5db04f4b version:int start_date:int end_date:int min_bid_amount:long bid_levels:Vector<AuctionBidLevel> top_bidders:Vector<long> next_round_at:int gifts_left:int current_round:int total_rounds:int = StarGiftAuctionState;
starGiftAuctionStateFinished#7d967c3a start_date:int end_date:int average_price:long = StarGiftAuctionState;
starGiftAuctionStateNotModified#fe333952 = StarGiftAuctionState;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**starGiftAuctionState**](constructor/starGiftAuctionState) | NOTHING |
| [**starGiftAuctionStateFinished**](constructor/starGiftAuctionStateFinished) | NOTHING |
| [**starGiftAuctionStateNotModified**](constructor/starGiftAuctionStateNotModified) | NOTHING |