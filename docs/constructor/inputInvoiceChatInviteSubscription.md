# inputInvoiceChatInviteSubscription

**Description** : *Used to pay for a Telegram Star subscription »*

**Layer** : 211

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
	hash : 'yx7ZbtweqlGWDk0r',
);
```