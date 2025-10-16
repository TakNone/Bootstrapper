# inputInvoiceBusinessBotTransferStars

**Description** : *Transfer stars from the balance of a user account connected to a business bot, to the balance of the business bot, see here &raquo; for more info on the full flow*

**Layer** : 216

```tl
inputInvoiceBusinessBotTransferStars#f4997e42 bot:InputUser stars:long = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Always inputUserSelf |
| <mark>stars</mark> | [`long`](type/long) | The number of stars to transfer |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceBusinessBotTransferStars(
	bot : $client->inputUserEmpty(),
	stars : 802757057080770184,
);
```