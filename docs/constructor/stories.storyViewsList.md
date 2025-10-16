# stories.storyViewsList

**Description** : *Reaction and view counters for a story*

**Layer** : 216

```tl
stories.storyViewsList#59d78fc5 flags:# count:int views_count:int forwards_count:int reactions_count:int views:Vector<StoryView> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryViewsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results that can be fetched |
| <mark>views_count</mark> | [`int`](type/int) | Total number of story views |
| <mark>forwards_count</mark> | [`int`](type/int) | Total number of story forwards/reposts |
| <mark>reactions_count</mark> | [`int`](type/int) | Number of reactions that were added to the story |
| <mark>views</mark> | [`Vector<StoryView>`](type/StoryView) | Story view date and reaction information |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| **next_offset** | [`flags.0?string`](type/string) | Offset for pagination |

---

## Type

[stories.StoryViewsList](type/stories.StoryViewsList)

---

## Example

```php
$storiesStoryViewsList = $client->stories->storyViewsList(
	count : 18,
	views_count : 42,
	forwards_count : 57,
	reactions_count : 72,
	views : array(
		$client->storyView(
			blocked : true,
			blocked_my_stories_from : true,
			user_id : -3545861562758298817,
			date : 89,
			reaction : $client->reactionEmpty(),
		),
		$client->storyViewPublicForward(
			blocked : true,
			blocked_my_stories_from : true,
			message : $client->messageEmpty(
				id : 50,
				peer_id : $client->peerUser(...),
			),
		),
		$client->storyViewPublicRepost(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 2090473638469331026,
			),
			story : $client->storyItemDeleted(
				id : 88,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5490669396361379831,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5819859134463270275,
			title : 'dQbLeRCMnqNA2gst',
			photo : $client->chatPhotoEmpty(),
			participants_count : 56,
			date : 84,
			version : 56,
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
				until_date : 51,
			),
		),
		$client->chatForbidden(
			id : 5865526953783539396,
			title : 'aSCOBVsoNDRPctWg',
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
			id : 2217591683764923126,
			access_hash : 4478389999564760405,
			title : '3d8fv4VCBz6qRAUh',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 33,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'yGQtsXfb7eTWgdo8',
					reason : 'kqcoPTnpBjeKGXLH',
					text : 'nrcJs7YflQWFXkMe',
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
				until_date : 78,
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
				until_date : 94,
			),
			participants_count : 89,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 94,
			color : $client->peerColor(
				color : 27,
				background_emoji_id : -8854190572604779875,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : 1394942518528235850,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 22,
			subscription_until_date : 38,
			bot_verification_icon : 7184804349332923603,
			send_paid_messages_stars : -2474476902441249657,
			linked_monoforum_id : -3772767413158405207,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1060811955008759491,
			access_hash : 8278379644497606663,
			title : 'EzGl9FxrUa8PyL7M',
			until_date : 72,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1442615330097894530,
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
			id : 4077925887236338537,
			access_hash : 7403196846001526583,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'd2qwnTbkYR9pmByv',
					reason : 'Lcg0iXBHtC6dNUse',
					text : 'pY1nSwNtUKbi4Bqa',
				),
			),
			bot_inline_placeholder : 'c7q16myZzbuCkji9',
			lang_code : 'eUDO8lTB4oasAhnP',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 24,
			color : $client->peerColor(
				color : 19,
				background_emoji_id : -6437475477494118999,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : 3350208146330577018,
			),
			bot_active_users : 26,
			bot_verification_icon : -8108325700605027391,
			send_paid_messages_stars : -6210577920781487006,
		),
	),
	next_offset : '9qIloCZxhvQ54zrO',
);
```