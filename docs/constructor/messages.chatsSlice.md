# messages.chatsSlice

**Description** : *Partial list of chats, more would have to be fetched with pagination*

**Layer** : 227

```tl
messages.chatsSlice#9cd81144 count:int chats:Vector<Chat> = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of results that were found server-side (not all are included in chats) |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |

---

## Type

[messages.Chats](type/messages.Chats)

---

## Example

```php
$messagesChats = $client->messages->chatsSlice(
	count : 69,
	chats : array(
		$client->chatEmpty(
			id : 1109637308227312416,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5043841746951873178,
			title : 'vcOfWbmCj1Ywikod',
			photo : $client->chatPhotoEmpty(),
			participants_count : 75,
			date : 41,
			version : 40,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 0,
			),
		),
		$client->chatForbidden(
			id : -7615043550069790177,
			title : 'eFVRiaZtIuPbwN0X',
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
			id : 8462163952711633700,
			access_hash : 8930847851917431037,
			title : '7rnAHT9WcKtzGVe2',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 15,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'EJVg8e47FLiZQmzx',
					reason : 'a9Vtw3NBQlvdJuxT',
					text : 'Hsy80qgKwMQPftCo',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 52,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 12,
			),
			participants_count : 37,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 65,
			),
			color : $client->peerColor(
				color : 50,
				background_emoji_id : -5553346481937592894,
			),
			profile_color : $client->peerColor(
				color : 34,
				background_emoji_id : 2816536328992724903,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 84,
			subscription_until_date : 10,
			bot_verification_icon : -2663864205788069853,
			send_paid_messages_stars : -2034962740361454445,
			linked_monoforum_id : 6052250242463444172,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 5165810386239692403,
			access_hash : -3756405988968450390,
			title : 'ERJI0OuW2zFQ6Mh8',
			until_date : 96,
		),
	),
);
```