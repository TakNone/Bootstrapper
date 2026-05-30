# stories.foundStories

**Description** : *Stories found using global story search &raquo;*

**Layer** : 222

```tl
stories.foundStories#e2de7737 flags:# count:int stories:Vector<FoundStory> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stories.FoundStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 80,
	stories : array(
		$client->foundStory(
			peer : $client->peerUser(
				user_id : 7063330671405050188,
			),
			story : $client->storyItemDeleted(
				id : 77,
			),
		),
	),
	next_offset : 'cg3KG4Wj7sYZwQPz',
	chats : array(
		$client->chatEmpty(
			id : -7852115143787907898,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7093654381552115751,
			title : 'RxmMPF9V2Zp4b56w',
			photo : $client->chatPhotoEmpty(),
			participants_count : 83,
			date : 93,
			version : 15,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 10,
			),
		),
		$client->chatForbidden(
			id : -6585142592556082588,
			title : 'MB15dWqYlNzm0jTu',
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
			id : -2587732138353550910,
			access_hash : -5891266519624596581,
			title : '8mpzaQFKi3rJCo9V',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 79,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'quzLKGfUMEroN6gd',
					reason : 'zLdoaStR9iTfxwCA',
					text : 'qEkpMvOeGhbQcfJ9',
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
				until_date : 70,
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
				until_date : 62,
			),
			participants_count : 8,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 32,
			),
			color : $client->peerColor(
				color : 60,
				background_emoji_id : -8545543765031545535,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : -2860214811321546666,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 28,
			subscription_until_date : 30,
			bot_verification_icon : 1483840588278602663,
			send_paid_messages_stars : -3631134879226839482,
			linked_monoforum_id : 6608720892871501703,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -89735909727363002,
			access_hash : 4796181926229148362,
			title : 'WrsZTaXBxSjLI1Ae',
			until_date : 6,
		),
	),
	users : array(
		$client->userEmpty(
			id : -5865820726362726234,
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
			id : 7204232067144182319,
			access_hash : 1015680042358742578,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 55,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'YBnRxt4k2qiPWOFl',
					reason : 'lNAC2f6KRboL5hrn',
					text : 'pIiZwu3eMQFlq58P',
				),
			),
			bot_inline_placeholder : 'Zz0E7odKa9p5uWrn',
			lang_code : 'hTfloNYcRSU95vL0',
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
				color : 0,
				background_emoji_id : 1789822195958942230,
			),
			profile_color : $client->peerColor(
				color : 44,
				background_emoji_id : 7164444925770434520,
			),
			bot_active_users : 58,
			bot_verification_icon : 7983468698366066155,
			send_paid_messages_stars : 2772279958859807283,
		),
	),
);
```