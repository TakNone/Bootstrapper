# channelAdminLogEventActionExportedInviteEdit

**Description** : *A chat invite was edited*

**Layer** : 216

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
		link : 'm1cP3R7eghTElMn9',
		admin_id : 26618060438131329,
		date : 93,
		start_date : 77,
		expire_date : 64,
		usage_limit : 24,
		usage : 60,
		requested : 6,
		subscription_expired : 45,
		title : 'pnlYQe8KfI4zX5vC',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 64,
			amount : -2207583597590612484,
		),
	),
	new_invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : 'tpSyZ9xRgCwTDYb6',
		admin_id : -4819735687954662897,
		date : 17,
		start_date : 79,
		expire_date : 42,
		usage_limit : 78,
		usage : 33,
		requested : 79,
		subscription_expired : 95,
		title : 'w0zcCNAydK32hfFD',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 28,
			amount : 179813785563290937,
		),
	),
);
```