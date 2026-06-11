# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 227

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
		link : 'JUh4n07qYy8Vj3Km',
		admin_id : 3779041310335380339,
		date : 52,
		start_date : 50,
		expire_date : 87,
		usage_limit : 99,
		usage : 16,
		requested : 50,
		subscription_expired : 41,
		title : 'IRpeCuLzQtn95Xld',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 92,
			amount : -7118526764921863718,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '7Nh9TprKjBytFvbS',
		admin_id : -7569872817500874256,
		date : 97,
		start_date : 39,
		expire_date : 39,
		usage_limit : 20,
		usage : 69,
		requested : 49,
		subscription_expired : 3,
		title : '8nsE9SKhfpdQWD5J',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 10,
			amount : -3894738431861963832,
		),
	),
);
```