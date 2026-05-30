# stats.publicForwards

**Description** : *Contains info about the forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 222

```tl
stats.publicForwards#93037e20 flags:# count:int forwards:Vector<PublicForward> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stats.PublicForwards;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 4,
	forwards : array(
		$client->publicForwardMessage(
			message : $client->messageEmpty(
				id : 58,
				peer_id : $client->peerUser(
					user_id : -379925610549322007,
				),
			),
		),
		$client->publicForwardStory(
			peer : $client->peerUser(
				user_id : -8386351479650467980,
			),
			story : $client->storyItemDeleted(
				id : 37,
			),
		),
	),
	next_offset : 'Um20XqCZgPyw9z4Y',
	chats : array(
		$client->chatEmpty(
			id : -2649919189158355854,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 3328484772728174343,
			title : 'ELP8CZHbXu46tIU5',
			photo : $client->chatPhotoEmpty(),
			participants_count : 96,
			date : 97,
			version : 32,
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
				until_date : 63,
			),
		),
		$client->chatForbidden(
			id : 7644337031564505939,
			title : 'aypunW9OCDPzv47Q',
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
			id : -3299446297896288986,
			access_hash : -4237681045769457937,
			title : 'ad6gpLzDTO1KoHYt',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 23,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ayMLdZGvN80Ajm2Q',
					reason : 'QRTcz6XYbjxCWHvV',
					text : '5BloKVxf6Y3cS7vr',
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
				until_date : 20,
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
				until_date : 74,
			),
			participants_count : 42,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 31,
			),
			color : $client->peerColor(
				color : 12,
				background_emoji_id : 1425268921020741766,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : -3581291257265973244,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 18,
			subscription_until_date : 76,
			bot_verification_icon : 3138699854401750175,
			send_paid_messages_stars : -7558644201496251610,
			linked_monoforum_id : 3818989145262637794,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5455029784633711049,
			access_hash : 5570702927488461871,
			title : 'pPCmsTQzvbcGtyA0',
			until_date : 91,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1585381197493106959,
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
			id : 4292696942734490402,
			access_hash : 2967161850251254884,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'bPlIBHNXtZA8WV6S',
					reason : 'hmb5zlr7OPWIYdT6',
					text : 'W8ScT2i4sPuDqdEe',
				),
			),
			bot_inline_placeholder : 'PHpKue4Nqz6OcCDJ',
			lang_code : '24Bb0N9hoXF8f13g',
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
				max_id : 70,
			),
			color : $client->peerColor(
				color : 16,
				background_emoji_id : -3627572799629194132,
			),
			profile_color : $client->peerColor(
				color : 93,
				background_emoji_id : 5516056075401290747,
			),
			bot_active_users : 77,
			bot_verification_icon : 9160572440662985834,
			send_paid_messages_stars : -8607373497542480558,
		),
	),
);
```