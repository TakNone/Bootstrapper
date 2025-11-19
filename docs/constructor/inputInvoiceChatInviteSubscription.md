# inputInvoiceChatInviteSubscription

**Description** : *Used to pay for a Telegram Star subscription &raquo;*

**Layer** : 218

```tl
inputInvoiceChatInviteSubscription#34e793f1 hash:string = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`string`](type/string) | The invitation link of the Telegram Star subscription » |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceChatInviteSubscription(
	hash : 'WHhY143dXM6xAySP',
);
```