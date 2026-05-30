# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 225

```tl
channelAdminLogEventActionExportedInviteRevoke#410a134e invite:ExportedChatInvite = ChannelAdminLogEventAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>invite</mark> | [`ExportedChatInvite`](type/ExportedChatInvite) | The invite link that was revoked |

---

## Type

[ChannelAdminLogEventAction](type/ChannelAdminLogEventAction)

---

## Example

```php
$channelAdminLogEventAction = $client->channelAdminLogEventActionExportedInviteRevoke(
	invite : $client->chatInviteExported(
		revoked : true,
		permanent : true,
		request_needed : true,
		link : '10xUpFMKqGCmjoi7',
		admin_id : 966411788399618797,
		date : 48,
		start_date : 13,
		expire_date : 25,
		usage_limit : 21,
		usage : 96,
		requested : 62,
		subscription_expired : 61,
		title : '7SpAGQaVFwKixzEN',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 52,
			amount : 4979237475902508864,
		),
	),
);
```