# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 225

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
			pos : 12,
			user_id : 5962251747605452301,
			score : 85,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6493942037798027146,
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
			id : -7159455564540377192,
			access_hash : -509766395993722636,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 36,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GPvuhWqKBrAOLFU9',
					reason : 'DqRWAbfLxhmiKkS5',
					text : 'UEXOkniBuy2bV5wT',
				),
			),
			bot_inline_placeholder : 'LQvZl04X6Ve8mnwj',
			lang_code : 'jIhcaDyzYZJfbixw',
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
				max_id : 100,
			),
			color : $client->peerColor(
				color : 94,
				background_emoji_id : 2645492034193239122,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : -3905212090492180046,
			),
			bot_active_users : 85,
			bot_verification_icon : -8087563078145592206,
			send_paid_messages_stars : -4556313315646297468,
		),
	),
);
```