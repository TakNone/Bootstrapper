# BroadcastRevenueTransaction

**Description** : *A channel ad revenue &raquo; transaction*

**Layer** : 214

```tl
broadcastRevenueTransactionRefund#42d30d2e amount:long from_date:int provider:string = BroadcastRevenueTransaction;
broadcastRevenueTransactionProceeds#557e2cc4 amount:long from_date:int to_date:int = BroadcastRevenueTransaction;
broadcastRevenueTransactionWithdrawal#5a590978 flags:# pending:flags.0?true failed:flags.2?true amount:long date:int provider:string transaction_date:flags.1?int transaction_url:flags.1?string = BroadcastRevenueTransaction;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**broadcastRevenueTransactionRefund**](constructor/broadcastRevenueTransactionRefund) | Describes a refund for failed withdrawal of ad earnings » |
| [**broadcastRevenueTransactionProceeds**](constructor/broadcastRevenueTransactionProceeds) | Describes earnings from sponsored messages in a channel in some time frame, see here » for more info |
| [**broadcastRevenueTransactionWithdrawal**](constructor/broadcastRevenueTransactionWithdrawal) | Describes a withdrawal of ad earnings » |