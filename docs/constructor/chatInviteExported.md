# chatInviteExported

**Description** : *Exported chat invite*

**Layer** : 218

```tl
chatInviteExported#a22cbd96 flags:# revoked:flags.0?true permanent:flags.5?true request_needed:flags.6?true link:string admin_id:long date:int start_date:flags.4?int expire_date:flags.1?int usage_limit:flags.2?int usage:flags.3?int requested:flags.7?int subscription_expired:flags.10?int title:flags.8?string subscription_pricing:flags.9?StarsSubscriptionPricing = ExportedChatInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **revoked** | [`flags.0?true`](type/true) | Whether this chat invite was revoked |
| **permanent** | [`flags.5?true`](type/true) | Whether this chat invite has no expiration |
| **request_needed** | [`flags.6?true`](type/true) | Whether users importing this invite link will have to be approved to join the channel or group |
| <mark>link</mark> | [`string`](type/string) | Chat invitation link |
| <mark>admin_id</mark> | [`long`](type/long) | ID of the admin that created this chat invite |
| <mark>date</mark> | [`int`](type/int) | When was this chat invite created |
| **start_date** | [`flags.4?int`](type/int) | When was this chat invite last modified |
| **expire_date** | [`flags.1?int`](type/int) | When does this chat invite expire |
| **usage_limit** | [`flags.2?int`](type/int) | Maximum number of users that can join using this link |
| **usage** | [`flags.3?int`](type/int) | How many users joined using this link |
| **requested** | [`flags.7?int`](type/int) | Number of users that have already used this link to join |
| **subscription_expired** | [`flags.10?int`](type/int) | For Telegram Star subscriptions », contains the number of chat members which have already joined the chat using the link, but have already left due to expiration of their subscription |
| **title** | [`flags.8?string`](type/string) | Custom description for the invite link, visible only to admins |
| **subscription_pricing** | [`flags.9?StarsSubscriptionPricing`](type/StarsSubscriptionPricing) | For Telegram Star subscriptions », contains the pricing of the subscription the user must activate to join the private channel |

---

## Type

[ExportedChatInvite](type/ExportedChatInvite)

---

## Example

```php
$exportedChatInvite = $client->chatInviteExported(
	revoked : true,
	permanent : true,
	request_needed : true,
	link : 'wvLsE7b6lVdYxia9',
	admin_id : 432558047692889100,
	date : 19,
	start_date : 99,
	expire_date : 91,
	usage_limit : 61,
	usage : 86,
	requested : 12,
	subscription_expired : 22,
	title : 'JgWL64BitvVI1XM9',
	subscription_pricing : $client->starsSubscriptionPricing(
		period : 56,
		amount : 1147014711721664481,
	),
);
```