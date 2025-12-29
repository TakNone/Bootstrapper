# premiumSubscriptionOption

**Description** : *Describes a Telegram Premium subscription option*

**Layer** : 218

```tl
premiumSubscriptionOption#5f2d1df2 flags:# current:flags.1?true can_purchase_upgrade:flags.2?true transaction:flags.3?string months:int currency:string amount:long bot_url:string store_product:flags.0?string = PremiumSubscriptionOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **current** | [`flags.1?true`](type/true) | Whether this subscription option is currently in use |
| **can_purchase_upgrade** | [`flags.2?true`](type/true) | Whether this subscription option can be used to upgrade the existing Telegram Premium subscription. When upgrading Telegram Premium subscriptions bought through stores, make sure that the store transaction ID is equal to transaction, to avoid upgrading someone else's account, if the client is currently logged into multiple accounts |
| **transaction** | [`flags.3?string`](type/string) | Identifier of the last in-store transaction for the currently used subscription on the current account |
| <mark>months</mark> | [`int`](type/int) | Duration of subscription in months |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>bot_url</mark> | [`string`](type/string) | Deep link used to initiate payment |
| **store_product** | [`flags.0?string`](type/string) | Store product ID, only for official apps |

---

## Type

[PremiumSubscriptionOption](type/PremiumSubscriptionOption)

---

## Example

```php
$premiumSubscriptionOption = $client->premiumSubscriptionOption(
	current : true,
	can_purchase_upgrade : true,
	transaction : 'TCaQKJg05WfVEklv',
	months : 53,
	currency : 'cNUhXA6dMsKgrREC',
	amount : 7859362597815196737,
	bot_url : 'https://docs.liveproto.dev',
	store_product : 'avZdwOL4koVN6HXI',
);
```