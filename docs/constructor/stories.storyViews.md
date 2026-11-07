# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 229

```tl
stories.storyViews#de9eed1d views:Vector<StoryViews> users:Vector<User> = stories.StoryViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>views</mark> | [`Vector<StoryViews>`](type/StoryViews) | View date and reaction information of multiple stories |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.StoryViews](type/stories.StoryViews)

---

## Example

```php
$storiesStoryViews = $client->stories->storyViews(
	views : array(
		$client->storyViews(
			has_viewers : true,
			views_count : 39,
			forwards_count : 5,
			reactions : array(
				$client->reactionCount(
					chosen_order : 39,
					reaction : $client->reactionEmpty(),
					count : 63,
				),
			),
			reactions_count : 98,
			recent_viewers : array(-5549094023498136685),
		),
	),
	users : array(
		$client->userEmpty(
			id : 7709933952259382902,
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
			id : 2632344206655998695,
			access_hash : 5290750451950692868,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bB2Oi06yJlFrgkqT',
					reason : 'F9cDxl4k571Xt80v',
					text : 'kuTF8yqMV3bvUnL1',
				),
			),
			bot_inline_placeholder : 'ENDZ3Hx84TwPmQJS',
			lang_code : 'B5fAjPyWo8KUbHe4',
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
				max_id : 18,
			),
			color : $client->peerColor(
				color : 61,
				background_emoji_id : -6064555683732786463,
			),
			profile_color : $client->peerColor(
				color : 32,
				background_emoji_id : -857034383483805070,
			),
			bot_active_users : 99,
			bot_verification_icon : -5797699485473993166,
			send_paid_messages_stars : 6369685354104230648,
			linked_community_id : 7023012041471146521,
		),
	),
);
```