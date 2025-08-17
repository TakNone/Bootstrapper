# InputInvoice

**Description** : *An invoice*

**Layer** : 211

```tl
inputInvoiceMessage#c5b56859 peer:InputPeer msg_id:int = InputInvoice;
inputInvoiceSlug#c326caef slug:string = InputInvoice;
inputInvoicePremiumGiftCode#98986c0d purpose:InputStorePaymentPurpose option:PremiumGiftCodeOption = InputInvoice;
inputInvoiceStars#65f00ce3 purpose:InputStorePaymentPurpose = InputInvoice;
inputInvoiceChatInviteSubscription#34e793f1 hash:string = InputInvoice;
inputInvoiceStarGift#e8625e92 flags:# hide_name:flags.0?true include_upgrade:flags.2?true peer:InputPeer gift_id:long message:flags.1?TextWithEntities = InputInvoice;
inputInvoiceStarGiftUpgrade#4d818d5d flags:# keep_original_details:flags.0?true stargift:InputSavedStarGift = InputInvoice;
inputInvoiceStarGiftTransfer#4a5f5bd9 stargift:InputSavedStarGift to_id:InputPeer = InputInvoice;
inputInvoicePremiumGiftStars#dabab2ef flags:# user_id:InputUser months:int message:flags.0?TextWithEntities = InputInvoice;
inputInvoiceBusinessBotTransferStars#f4997e42 bot:InputUser stars:long = InputInvoice;
inputInvoiceStarGiftResale#c39f5324 flags:# ton:flags.0?true slug:string to_id:InputPeer = InputInvoice;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputInvoiceMessage**](constructor/inputInvoiceMessage) | An invoice contained in a messageMediaInvoice message or paid media » |
| [**inputInvoiceSlug**](constructor/inputInvoiceSlug) | An invoice slug taken from an invoice deep link or from the premium_invoice_slug app config parameter » |
| [**inputInvoicePremiumGiftCode**](constructor/inputInvoicePremiumGiftCode) | Used if the user wishes to start a channel/supergroup giveaway or send some giftcodes to members of a channel/supergroup, in exchange for boosts |
| [**inputInvoiceStars**](constructor/inputInvoiceStars) | Used to top up the Telegram Stars balance of the current account or someone else's account, or to start a Telegram Star giveaway » |
| [**inputInvoiceChatInviteSubscription**](constructor/inputInvoiceChatInviteSubscription) | Used to pay for a Telegram Star subscription » |
| [**inputInvoiceStarGift**](constructor/inputInvoiceStarGift) | Used to buy a Telegram Star Gift, see here » for more info |
| [**inputInvoiceStarGiftUpgrade**](constructor/inputInvoiceStarGiftUpgrade) | NOTHING |
| [**inputInvoiceStarGiftTransfer**](constructor/inputInvoiceStarGiftTransfer) | NOTHING |
| [**inputInvoicePremiumGiftStars**](constructor/inputInvoicePremiumGiftStars) | NOTHING |
| [**inputInvoiceBusinessBotTransferStars**](constructor/inputInvoiceBusinessBotTransferStars) | NOTHING |
| [**inputInvoiceStarGiftResale**](constructor/inputInvoiceStarGiftResale) | NOTHING |