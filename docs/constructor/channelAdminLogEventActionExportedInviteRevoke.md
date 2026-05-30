# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 222

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
		link : 'wy6oUgk0NznH7haT',
		admin_id : 3144602622531171561,
		date : 5,
		start_date : 46,
		expire_date : 96,
		usage_limit : 71,
		usage : 78,
		requested : 38,
		subscription_expired : 23,
		title : 'jT6iZ7pbws2xr05I',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 94,
			amount : -770940035873385252,
		),
	),
);
```