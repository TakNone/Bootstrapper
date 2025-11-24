# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 218

```tl
payments.connectedStarRefBots#98d5ea1d count:int connected_bots:Vector<ConnectedBotStarRef> users:Vector<User> = payments.ConnectedStarRefBots;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of active affiliations |
| <mark>connected_bots</mark> | [`Vector<ConnectedBotStarRef>`](type/ConnectedBotStarRef) | The affiliations |
| <mark>users</mark> | [`Vector<User>`](type/User) | Peers mentioned in connected_bots |

---

## Type

[payments.ConnectedStarRefBots](type/payments.ConnectedStarRefBots)

---

## Example

```php
$paymentsConnectedStarRefBots = $client->payments->connectedStarRefBots(
	count : 20,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 79,
			bot_id : -2079534598084706306,
			commission_permille : 14,
			duration_months : 88,
			participants : 97795400121952319,
			revenue : -6299585416060530597,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8518592944555556342,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : 2367654845458944449,
			access_hash : -9055520539150193880,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'WOfVuI0G7wzBDLiR',
					reason : 'DaHqWALs02uQ4GbC',
					text : 'CljRp79iDWms8oBc',
				),
			),
			bot_inline_placeholder : 'fGAynO4auXNCzFL0',
			lang_code : 'eBHlUhOsYyCrfQ8R',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 47,
			),
			color : $client->peerColor(
				color : 36,
				background_emoji_id : 19180345374625894,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : 5680372492618948084,
			),
			bot_active_users : 3,
			bot_verification_icon : 5094352232290873807,
			send_paid_messages_stars : 7704096155510160240,
		),
	),
);
```