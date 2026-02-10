# messages.chats

**Description** : *List of chats with auxiliary data*

**Layer** : 222

```tl
messages.chats#64ff9fd5 chats:Vector<Chat> = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats |

---

## Type

[messages.Chats](type/messages.Chats)

---

## Example

```php
$messagesChats = $client->messages->chats(
	chats : array(
		$client->chatEmpty(
			id : 3732215215855580023,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4912029101284099217,
			title : 'TvEzkwRIfempZKgH',
			photo : $client->chatPhotoEmpty(),
			participants_count : 60,
			date : 73,
			version : 42,
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
				until_date : 57,
			),
		),
		$client->chatForbidden(
			id : 5733991456110060670,
			title : '8IhTUSeyuk5CL1lv',
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
			id : -4962113890540152540,
			access_hash : -6784088351659572106,
			title : 'nXsefO80wbRI7yAj',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'rk0xg1RS7HeqcU2y',
					reason : 'KHSYpgPykAINFztl',
					text : 'JKGEiIYRZpqtrVkT',
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
				until_date : 18,
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
				until_date : 26,
			),
			participants_count : 82,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 63,
			),
			color : $client->peerColor(
				color : 25,
				background_emoji_id : 1902283340982166500,
			),
			profile_color : $client->peerColor(
				color : 66,
				background_emoji_id : 8910794782821899936,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 86,
			subscription_until_date : 25,
			bot_verification_icon : 1338002925402373756,
			send_paid_messages_stars : 7146151701642856969,
			linked_monoforum_id : -8963308397515113121,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 1008973932937552368,
			access_hash : 618355928644529345,
			title : 'KOSJkxn3aowZIrf0',
			until_date : 6,
		),
	),
);
```