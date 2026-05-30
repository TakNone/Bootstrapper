# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 222

```tl
channelAdminLogEventActionExportedInviteEdit#e90ebb59 prev_invite:ExportedChatInvite new_invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>prev_invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | Previous chat invite information |
| <mark>new_invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | New chat invite information |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteEdit(
	prev_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'ZRJ8HrYsCpywb4xP',
		admin_id : 3432148739511931332,
		date : 42,
		start_date : 73,
		expire_date : 33,
		usage_limit : 20,
		usage : 19,
		requested : 24,
		subscription_expired : 25,
		title : 'tnKgcB9E3TS5JMmD',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 86,
			amount : -6914794733649412913,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'wIyKEsiRXq4xOHVg',
		admin_id : -7872082990467976147,
		date : 92,
		start_date : 82,
		expire_date : 49,
		usage_limit : 36,
		usage : 85,
		requested : 8,
		subscription_expired : 99,
		title : 'vYrtldDh5qNkcnAF',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 58,
			amount : 1676845799179786731,
		),
	),
);
```