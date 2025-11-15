# premiumGiftOption

**Description** : *Telegram Premium gift option*

**Layer** : 216

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
	months : 56,
	currency : 'jgCaYpISDBQyVm8G',
	amount : -3583046408145423150,
	bot_url : 'https://docs.liveproto.dev',
	store_product : 'f7gYoyThmCbPXsxt',
);
```