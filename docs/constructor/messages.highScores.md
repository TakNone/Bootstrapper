# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 227

```tl
messages.highScores#9a3bfd99 scores:Vector<HighScore> users:Vector<User> = messages.HighScores;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>scores</mark> | [`Vector<HighScore>`](type/HighScore) | Highscores |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users, associated to the highscores |

---

## Type

[messages.HighScores](type/messages.HighScores)

---

## Example

```php
$messagesHighScores = $client->messages->highScores(
	scores : array(
		$client->highScore(
			pos : 37,
			user_id : 5438180705698077655,
			score : 54,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7197549748796274318,
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
			id : -8052740136801213556,
			access_hash : -2498377699865168438,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 47,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gLXIlcCAtYh2PwMV',
					reason : 'nIWamz84TLgtC3N5',
					text : 'ZWk1Hf35CDvJTRKj',
				),
			),
			bot_inline_placeholder : '5SvUp3P4m2cOuNoh',
			lang_code : 'AY2J79pG8fTCWjqt',
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
				max_id : 74,
			),
			color : $client->peerColor(
				color : 75,
				background_emoji_id : -7567265821329149469,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : 831762282199607868,
			),
			bot_active_users : 0,
			bot_verification_icon : -6877452340411196933,
			send_paid_messages_stars : 3246983076049654547,
		),
	),
);
```