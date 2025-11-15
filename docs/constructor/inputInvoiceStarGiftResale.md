# inputInvoiceStarGiftResale

**Description** : *Used to buy a collectible gift currently up on resale, see here for more info on the full flow*

**Layer** : 216

```tl
inputInvoiceStarGiftResale#c39f5324 flags:# ton:flags.0?true slug:string to_id:InputPeer = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **ton** | [`flags.0?true`](type/true) | Buy the gift using TON |
| <mark>slug</mark> | [`string`](type/string) | Slug of the gift to buy |
| <mark>to_id</mark> | [`InputPeer`](type/InputPeer) | The receiver of the gift |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftResale(
	ton : true,
	slug : 'bZEdMvmPIRBe1O69',
	to_id : $client->inputPeerEmpty(),
);
```