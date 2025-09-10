# channelAdminLogEventActionExportedInviteRevoke

**Description** : *A specific invite link was revoked*

**Layer** : 214

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
		link : 'gHRQqiMJmhltdaeI',
		admin_id : -4678217517016419688,
		date : 31,
		start_date : 80,
		expire_date : 79,
		usage_limit : 39,
		usage : 95,
		requested : 9,
		subscription_expired : 46,
		title : 'UJAO60m3tDxTbkuP',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 76,
			amount : 5467835019534303996,
		),
	),
);
```