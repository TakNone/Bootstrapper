# premiumGiftOption

**Description** : *Telegram Premium gift option*

**Layer** : 218

```tl
premiumGiftOption#79c059f7 flags:# months:int currency:string amount:long bot_url:flags.1?string store_product:flags.0?string = PremiumGiftOption;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>months</mark> | [`int`](type/int) | NOTHING |
| <mark>currency</mark> | [`string`](type/string) | NOTHING |
| <mark>amount</mark> | [`long`](type/long) | NOTHING |
| **bot_url** | [`flags.1?string`](type/string) | NOTHING |
| **store_product** | [`flags.0?string`](type/string) | NOTHING |

---

## Type

[PremiumGiftOption](type/PremiumGiftOption)

---

## Example

```php
$premiumGiftOption = $client->premiumGiftOption(
	months : 82,
	currency : 'zIYBZm3N6OaJMjuG',
	amount : -3253548778044198132,
	bot_url : 'https://docs.liveproto.dev',
	store_product : '7a46vueGyp9jCYdW',
);
```