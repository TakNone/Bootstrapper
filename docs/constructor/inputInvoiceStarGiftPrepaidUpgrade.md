# inputInvoiceStarGiftPrepaidUpgrade

**Layer** : 216

```tl
inputInvoiceStarGiftPrepaidUpgrade#9a0b48b8 peer:InputPeer hash:string = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>hash</mark> | [`string`](type/string) | NOTHING |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftPrepaidUpgrade(
	peer : $client->inputPeerEmpty(),
	hash : 'YjVp5r9khnJEoy0M',
);
```