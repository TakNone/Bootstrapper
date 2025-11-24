# inputInvoiceMessage

**Description** : *An invoice contained in a messageMediaInvoice message or paid media &raquo;*

**Layer** : 218

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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 77,
);
```