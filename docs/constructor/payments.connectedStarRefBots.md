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
	count : 38,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 60,
			bot_id : -5994681826341123252,
			commission_permille : 36,
			duration_months : 9,
			participants : 1445910184121986069,
			revenue : -341406223287313230,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4240638452284079206,
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
			id : 1923730919676608702,
			access_hash : 1400053593116738195,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'n5cVmpoW7wdEgzQK',
					reason : 'q6pI9BWUfmR4sitb',
					text : 'EzsxpBIa0AyX4RdW',
				),
			),
			bot_inline_placeholder : 'ELrsuHFkdp4JOAhZ',
			lang_code : '974CvXlDp18mFzin',
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
				max_id : 37,
			),
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -331888497048891593,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : -7513221227664476079,
			),
			bot_active_users : 88,
			bot_verification_icon : -6967352144794857538,
			send_paid_messages_stars : 7509986171584777298,
		),
	),
);
```