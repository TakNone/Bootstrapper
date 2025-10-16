# stats.publicForwards

**Description** : *Contains info about the forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 216

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
	count : 37,
	forwards : array(
		$client->publicForwardMessage(
			message : $client->messageEmpty(
				id : 6,
				peer_id : $client->peerUser(...),
			),
		),
		$client->publicForwardStory(
			peer : $client->peerUser(
				user_id : 4696684236785972265,
			),
			story : $client->storyItemDeleted(
				id : 13,
			),
		),
	),
	next_offset : '4JojTC7kB5pL1clf',
	chats : array(
		$client->chatEmpty(
			id : -4659318945241256580,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4778983976149664719,
			title : 'DSzCxvZRjthOM9W8',
			photo : $client->chatPhotoEmpty(),
			participants_count : 8,
			date : 51,
			version : 62,
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
				until_date : 15,
			),
		),
		$client->chatForbidden(
			id : -8620203349765078303,
			title : 'xR8GtBepEN3S2qfm',
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
			id : -4156410662825852379,
			access_hash : 1775658518729005194,
			title : 'a4iVylnUqsTmwuYK',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 29,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'teyU95VE4Gkc3gBm',
					reason : 'tNioXuYPZ5QUCIMR',
					text : 'NY1VdQBWraSu0ZI4',
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
				until_date : 24,
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
				until_date : 84,
			),
			participants_count : 26,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 31,
			color : $client->peerColor(
				color : 72,
				background_emoji_id : 4132880513790322968,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : 4728717203870197270,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 49,
			subscription_until_date : 79,
			bot_verification_icon : 4954536030747920774,
			send_paid_messages_stars : 135802362507830972,
			linked_monoforum_id : -4743454659766778320,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5999853810372419925,
			access_hash : -7341362679089472845,
			title : '7laLYsZ6BHoQmhCy',
			until_date : 20,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1791216290538499221,
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
			id : -1487948988917848429,
			access_hash : -5097338723554707444,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 66,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kQT5zAIDOpNF2a64',
					reason : 'UGup1jMNYzKA6raZ',
					text : 'yVziDmKhbsYFr8ou',
				),
			),
			bot_inline_placeholder : 'LGfF03JOikcyv4re',
			lang_code : 'mJy02MAhSRsXFEUv',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 93,
			color : $client->peerColor(
				color : 44,
				background_emoji_id : 4573447133602085976,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : 4238509798404953312,
			),
			bot_active_users : 28,
			bot_verification_icon : 2803358672667475889,
			send_paid_messages_stars : 6069111079837775391,
		),
	),
);
```