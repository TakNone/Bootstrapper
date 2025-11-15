# account.paidMessagesRevenue

**Description** : *Total number of non\-refunded Telegram Stars a user has spent on sending us messages either directly or through a channel, see here &raquo; for more info on paid messages*

**Layer** : 216

```tl
account.paidMessagesRevenue#1e109708 stars_amount:long = account.PaidMessagesRevenue;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stars_amount</mark> | [`long`](type/long) | Amount in Stars |

---

## Type

[account.PaidMessagesRevenue](type/account.PaidMessagesRevenue)

---

## Example

```php
$accountPaidMessagesRevenue = $client->account->paidMessagesRevenue(
	stars_amount : 7835392044145762321,
);
```