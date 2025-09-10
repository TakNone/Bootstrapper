# inputInvoiceMessage

**Description** : *An invoice contained in a messageMediaInvoice message or paid media &raquo;*

**Layer** : 214

```tl
inputInvoiceMessage#c5b56859 peer:InputPeer msg_id:int = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Chat where the invoice/paid media was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceMessage(
	peer : $client->inputPeerEmpty(),
	msg_id : 50,
);
```