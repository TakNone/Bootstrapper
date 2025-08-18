# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 211

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
		link : 'cGOQEh5mbTXHAUvD',
		admin_id : -8968449635541176694,
		date : 27,
		start_date : 3,
		expire_date : 43,
		usage_limit : 11,
		usage : 70,
		requested : 88,
		subscription_expired : 7,
		title : 'uLbaDWkZnGAjqzYO',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 1,
			amount : 6751731668524032660,
		),
	),
);
```