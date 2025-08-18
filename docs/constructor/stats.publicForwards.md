# stats.publicForwards

**Description** : *Contains info about the forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 211

```tl
stats.publicForwards#93037e20 flags:# count:int forwards:Vector<PublicForward> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stats.PublicForwards;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results |
| <mark>forwards</mark> | [`Vector<PublicForward>`](type/PublicForward) | Info about the forwards of a story |
| **next_offset** | [`flags.0?string`](type/string) | Offset used for pagination |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stats.PublicForwards](type/stats.PublicForwards)

---

## Example

```php
$statsPublicForwards = $client->stats->publicForwards(
	count : 24,
	forwards : array(
		$client->publicForwardMessage(
			message : $client->messageEmpty(
				id : 55,
				peer_id : $client->peerUser(...),
			),
		),
		$client->publicForwardStory(
			peer : $client->peerUser(
				user_id : 63852107946424676,
			),
			story : $client->storyItemDeleted(
				id : 26,
			),
		),
	),
	next_offset : 'ba3k9jdrDHPhTJCo',
	chats : array(
		$client->chatEmpty(
			id : 4178683371856754164,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7001857279243474086,
			title : 'gzNMcPsoFkdAG7IW',
			photo : $client->chatPhotoEmpty(),
			participants_count : 18,
			date : 75,
			version : 42,
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
				until_date : 8,
			),
		),
		$client->chatForbidden(
			id : -3923082563588116628,
			title : 'GXgKo2tESORUFmpD',
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
			id : -2512932399508538950,
			access_hash : 6381578138597765911,
			title : 'cUNYBOAkEfpCySMj',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 79,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'H3gfx2oZ4SaWFiQN',
					reason : 'XdVjEyUruGqNslvb',
					text : 'Kz5nkhMlf4ArDeaH',
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
				until_date : 6,
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
				until_date : 96,
			),
			participants_count : 19,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 35,
			color : $client->peerColor(
				color : 88,
				background_emoji_id : 5011856109034375579,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : 6609806647191274656,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 68,
			subscription_until_date : 77,
			bot_verification_icon : 7801676747438284682,
			send_paid_messages_stars : -1987886229625579043,
			linked_monoforum_id : -3625953480613043464,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8177203667193024593,
			access_hash : 7282594896570216052,
			title : 'zdfKhixRwjWgGvby',
			until_date : 64,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6413243522268172086,
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
			id : 1748123910821957455,
			access_hash : -9155853505345372656,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'LzJjONirWwS8Kou9',
					reason : 'ozYACQnKJW2G78qB',
					text : 'FJRbHx6n7w8TCicX',
				),
			),
			bot_inline_placeholder : '1OzTL83aUXm2PMFI',
			lang_code : '4CwvJX3MKbeLo0h8',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 88,
			color : $client->peerColor(
				color : 41,
				background_emoji_id : -4807306570137843936,
			),
			profile_color : $client->peerColor(
				color : 42,
				background_emoji_id : -3764050626896656537,
			),
			bot_active_users : 49,
			bot_verification_icon : 5567512816970509861,
			send_paid_messages_stars : -6278371976479628114,
		),
	),
);
```