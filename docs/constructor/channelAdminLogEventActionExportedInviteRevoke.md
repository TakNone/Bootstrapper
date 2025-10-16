# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 216

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
		link : '60LJOh3RYEKmFM9C',
		admin_id : -258365027990111614,
		date : 87,
		start_date : 91,
		expire_date : 90,
		usage_limit : 86,
		usage : 91,
		requested : 68,
		subscription_expired : 19,
		title : 'wbnm2i06adgHyUOG',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 5,
			amount : 1096936636558790711,
		),
	),
);
```