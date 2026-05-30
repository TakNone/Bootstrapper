# StarGiftAuctionState

**Layer** : 225

```tl
starGiftAuctionStateNotModified#fe333952 = StarGiftAuctionState;
starGiftAuctionState#771a4e66 version:int start_date:int end_date:int min_bid_amount:long bid_levels:Vector<AuctionBidLevel> top_bidders:Vector<long> next_round_at:int last_gift_num:int gifts_left:int current_round:int total_rounds:int rounds:Vector<StarGiftAuctionRound> = StarGiftAuctionState;
starGiftAuctionStateFinished#972dabbf flags:# start_date:int end_date:int average_price:long listed_count:flags.0?int fragment_listed_count:flags.1?int fragment_listed_url:flags.1?string = StarGiftAuctionState;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**starGiftAuctionStateNotModified**](constructor/starGiftAuctionStateNotModified) | NOTHING |
| [**starGiftAuctionState**](constructor/starGiftAuctionState) | NOTHING |
| [**starGiftAuctionStateFinished**](constructor/starGiftAuctionStateFinished) | NOTHING |