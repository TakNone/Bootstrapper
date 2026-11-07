# payments.connectedStarRefBots

**Description** : *Active affiliations*

**Layer** : 233

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
	count : 65,
	connected_bots : array(
		$client->connectedBotStarRef(
			revoked : true,
			url : 'https://docs.liveproto.dev',
			date : 59,
			bot_id : 8641418569103134676,
			commission_permille : 11,
			duration_months : 3,
			participants : 8667896812487577257,
			revenue : -671007734651955628,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6395613317171977691,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			bot_forum_sidebar : true,
			id : -1509612473743001645,
			access_hash : -1554368334949128669,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 96,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oLG4KAs7yWFI3bg1',
					reason : 'y8lvAngH6Rh4YCjw',
					text : 'L2wEaqf4BiYcXSsj',
				),
			),
			bot_inline_placeholder : '8WLq9ZiTyJQV6XEm',
			lang_code : 'LMhOg1uE9q7GAWB5',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 56,
			),
			color : $client->peerColor(
				color : 60,
				background_emoji_id : 6982061931789857413,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : 2828767958074163790,
			),
			bot_active_users : 84,
			bot_verification_icon : 8835814290013015765,
			send_paid_messages_stars : 7788722030857087658,
			linked_community_id : -3445980535102571945,
		),
	),
);
```