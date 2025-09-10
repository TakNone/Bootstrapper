# BroadcastRevenueBalances

**Description** : *Channel ad revenue balance &raquo; information*

**Layer** : 214

```tl
broadcastRevenueBalances#c3ff71e7 flags:# withdrawal_enabled:flags.0?true current_balance:long available_balance:long overall_revenue:long = BroadcastRevenueBalances;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**broadcastRevenueBalances**](constructor/broadcastRevenueBalances) | Describes channel ad revenue balances ».Note that all balances are in the smallest unit of the chosen cryptocurrency (currently nanotons for TONs, so to obtain a value in USD divide the chosen amount by 10^9, and then divide by usd_rate) |