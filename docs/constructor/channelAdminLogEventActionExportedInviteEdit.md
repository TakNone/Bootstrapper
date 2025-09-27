# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 214

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
		link : 'uPZCGMbRDzk1qJ7W',
		admin_id : 5620092128082956964,
		date : 0,
		start_date : 33,
		expire_date : 61,
		usage_limit : 90,
		usage : 12,
		requested : 76,
		subscription_expired : 59,
		title : 'IcqN0knCfyxXVUO8',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 25,
			amount : -2091858407126147893,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'nub768zyAqYxDj9l',
		admin_id : -3177288514222915309,
		date : 18,
		start_date : 96,
		expire_date : 87,
		usage_limit : 15,
		usage : 25,
		requested : 1,
		subscription_expired : 3,
		title : 'CqLThMrA6mi2WDge',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 69,
			amount : -1294023802426507579,
		),
	),
);
```