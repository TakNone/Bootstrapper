# messageActionSuggestedPostRefund

**Description** : *A suggested post &raquo; was accepted and posted or scheduled, but either the channel deleted the posted/scheduled post before stars\_suggested\_post\_age\_min seconds have elapsed, or the user refunded the payment for the stars used to pay for the suggested post*

**Layer** : 218

```tl
messageActionSuggestedPostRefund#69f916f8 flags:# payer_initiated:flags.0?true = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **payer_initiated** | [`flags.0?true`](type/true) | If set, the user refunded the payment for the stars used to pay for the suggested post |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSuggestedPostRefund(
	payer_initiated : true,
);
```