# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 233

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
			pos : 28,
			user_id : 2176567006021927583,
			score : 18,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4819925013248697132,
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
			id : -4214550593514642075,
			access_hash : 6811350920696648783,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'CJGMWl1npNqs8Q6U',
					reason : 'MdPap4ZontQGg7Bu',
					text : 'CeyX3bTAMhE5gtk2',
				),
			),
			bot_inline_placeholder : 'Cnm65vqzXD1R2IUO',
			lang_code : 'yl1iZhEsU8ujgaYI',
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
				max_id : 50,
			),
			color : $client->peerColor(
				color : 94,
				background_emoji_id : 3428756622628622811,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : 8808318516665601210,
			),
			bot_active_users : 87,
			bot_verification_icon : 8704533012443213311,
			send_paid_messages_stars : -4501333062405234649,
			linked_community_id : -3167205437934466482,
		),
	),
);
```