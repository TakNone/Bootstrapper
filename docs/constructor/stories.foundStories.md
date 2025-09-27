# stories.foundStories

**Description** : *Stories found using global story search &raquo;*

**Layer** : 214

```tl
stories.foundStories#e2de7737 flags:# count:int stories:Vector<FoundStory> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stories.FoundStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results found for the query |
| <mark>stories</mark> | [`Vector<FoundStory>`](type/FoundStory) | Matching stories |
| **next_offset** | [`flags.0?string`](type/string) | Offset used to fetch the next page, if not set this is the final page |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.FoundStories](type/stories.FoundStories)

---

## Example

```php
$storiesFoundStories = $client->stories->foundStories(
	count : 92,
	stories : array(
		$client->foundStory(
			peer : $client->peerUser(
				user_id : -7652669625353037588,
			),
			story : $client->storyItemDeleted(
				id : 38,
			),
		),
	),
	next_offset : 'TRwMYoUVH5NeOFtE',
	chats : array(
		$client->chatEmpty(
			id : -8448106255783193138,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4557129172406486597,
			title : 'EbONQx2Y7Igur5y3',
			photo : $client->chatPhotoEmpty(),
			participants_count : 78,
			date : 13,
			version : 99,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 0,
			),
		),
		$client->chatForbidden(
			id : 6861792507390685086,
			title : 'WZrRtm4TgQushx2l',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 6759060884655895761,
			access_hash : -177387648509191779,
			title : 'vE86PtXzCJ3fGVrl',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 88,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EHq0LvFfX9lyGPV1',
					reason : 'UCxJe6ci1VgTp38r',
					text : 'IwpLBzcVEYvH2sm1',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 60,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 25,
			),
			participants_count : 6,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 75,
			color : $client->peerColor(
				color : 55,
				background_emoji_id : 643373802271709000,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : -1150556305435955373,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 69,
			subscription_until_date : 81,
			bot_verification_icon : 1968147633037741625,
			send_paid_messages_stars : 5198728231688523628,
			linked_monoforum_id : 4474204203764623413,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 42564364947299172,
			access_hash : 5820420645872814430,
			title : 'SJVqNayc13YiFK9r',
			until_date : 98,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6070221509477404653,
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
			id : 6342932140185346570,
			access_hash : -8399028892730428666,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 83,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oMXy3g7KLnPzda0J',
					reason : 'yIDp1UVb92xkzAct',
					text : 'hFSDENaCerGZnyIj',
				),
			),
			bot_inline_placeholder : 'U7Z05TXYOuIHEecR',
			lang_code : 'UMkD8XqLgVe3wsYb',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 32,
			color : $client->peerColor(
				color : 97,
				background_emoji_id : 4515843544888743464,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : 5246876737332390186,
			),
			bot_active_users : 46,
			bot_verification_icon : 93960133610803448,
			send_paid_messages_stars : 2634972577831109431,
		),
	),
);
```