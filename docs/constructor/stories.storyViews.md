# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 225

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
			views_count : 41,
			forwards_count : 98,
			reactions : array(
				$client->reactionCount(
					chosen_order : 53,
					reaction : $client->reactionEmpty(),
					count : 14,
				),
			),
			reactions_count : 71,
			recent_viewers : array(4760769396288824738),
		),
	),
	users : array(
		$client->userEmpty(
			id : 2053461748206137351,
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
			id : -5629083885038635680,
			access_hash : -7561220200153418422,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Y64eID2CUJRouzFm',
					reason : 'TmFWiaRVduDgfPvU',
					text : '38vtfTY6xer2NipG',
				),
			),
			bot_inline_placeholder : 'NmySIAoKUsfWaC8k',
			lang_code : 'cDbzBnmaVAIdr0U6',
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
				max_id : 25,
			),
			color : $client->peerColor(
				color : 62,
				background_emoji_id : -7835370072868763825,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : -409342038498895844,
			),
			bot_active_users : 86,
			bot_verification_icon : 7275845339884032357,
			send_paid_messages_stars : -5801097720004492031,
		),
	),
);
```