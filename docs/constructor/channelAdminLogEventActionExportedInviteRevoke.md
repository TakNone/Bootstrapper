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
		link : 'xl70AGSzEpnfTjPK',
		admin_id : -2582175301362258633,
		date : 76,
		start_date : 55,
		expire_date : 87,
		usage_limit : 90,
		usage : 78,
		requested : 35,
		subscription_expired : 83,
		title : 'veS7gi39DuTkU0IY',
		subscription_pricing : $client->starsSubscriptionPricing(
			period : 28,
			amount : 5907926123782286406,
		),
	),
);
```