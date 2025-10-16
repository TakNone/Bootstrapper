# inputInvoiceStarGiftPrepaidUpgrade

**Description** : *Separately prepay for the upgrade of a gift &raquo;*

**Layer** : 216

```tl
inputInvoiceStarGiftPrepaidUpgrade#9a0b48b8 peer:InputPeer hash:string = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer that owns the gift |
| <mark>hash</mark> | [`string`](type/string) | The upgrade hash from messageActionStarGift.prepaid_upgrade_hash or savedStarGift.prepaid_upgrade_hash |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGiftPrepaidUpgrade(
	peer : $client->inputPeerEmpty(),
	hash : 'Bf6PmwJrUgtap0eN',
);
```