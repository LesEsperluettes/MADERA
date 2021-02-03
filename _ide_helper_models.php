<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Client
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $prenom
 * @property string $nom
 * @property string $mail
 * @property string $adresse
 * @property string $tel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Devis[] $devis
 * @property-read int|null $devis_count
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 */
	class Client extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Composant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property int $id_famille_composant
 * @property int $id_fournisseur
 * @property-read \App\Models\FamilleComposant|null $familleComposant
 * @property-read \App\Models\Fournisseur|null $fournisseur
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Composant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereIdFamilleComposant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereIdFournisseur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereUpdatedAt($value)
 */
	class Composant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Couverture
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture query()
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture whereUpdatedAt($value)
 */
	class Couverture extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Devis
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom_projet
 * @property string $reference_projet
 * @property int $id_client
 * @property-read \App\Models\Client|null $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Facturation[] $facturations
 * @property-read int|null $facturations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Devis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis query()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereIdClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereNomProjet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereReferenceProjet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereUpdatedAt($value)
 */
	class Devis extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Facturation
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float $total_demande
 * @property float $total_paye
 * @property int $id_devis
 * @property-read \App\Models\Devis|null $devis
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereIdDevis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereTotalDemande($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereTotalPaye($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereUpdatedAt($value)
 */
	class Facturation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FamilleComposant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Composant[] $composants
 * @property-read int|null $composants_count
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant query()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant whereUpdatedAt($value)
 */
	class FamilleComposant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Finition
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Finition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Finition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Finition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Finition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Finition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Finition whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Finition whereUpdatedAt($value)
 */
	class Finition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fournisseur
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $mail
 * @property string $adresse
 * @property string $tel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Composant[] $composants
 * @property-read int|null $composants_count
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereUpdatedAt($value)
 */
	class Fournisseur extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gamme
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property int $id_isolant
 * @property int $id_couverture
 * @property int $id_qualite_huisserie
 * @property int $id_ossature_bois
 * @property int $id_finition
 * @property-read \App\Models\Composant|null $composant
 * @property-read \App\Models\Finition|null $finition
 * @property-read \App\Models\Isolant|null $isolant
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @property-read \App\Models\OssatureBois|null $ossatureBois
 * @property-read \App\Models\Couverture|null $ouverture
 * @property-read \App\Models\QualiteHuisserie|null $qualiteHuisserie
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereIdCouverture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereIdFinition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereIdIsolant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereIdOssatureBois($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereIdQualiteHuisserie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereUpdatedAt($value)
 */
	class Gamme extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Isolant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant whereUpdatedAt($value)
 */
	class Isolant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Module
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property float $prix_base
 * @property float $marge_commerciale
 * @property int $gamme_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Devis[] $devis
 * @property-read int|null $devis_count
 * @property-read \App\Models\Gamme|null $gamme
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Montant[] $montants
 * @property-read int|null $montants_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Remplissage[] $remplissage
 * @property-read int|null $remplissage_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Section[] $sections
 * @property-read int|null $sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereGammeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereMargeCommerciale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePrixBase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereUpdatedAt($value)
 */
	class Module extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Montant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float $debut
 * @property float $fin
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Montant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Montant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Montant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Montant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Montant whereDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Montant whereFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Montant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Montant whereUpdatedAt($value)
 */
	class Montant extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OssatureBois
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois query()
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereUpdatedAt($value)
 */
	class OssatureBois extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QualiteHuisserie
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie query()
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie whereUpdatedAt($value)
 */
	class QualiteHuisserie extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Remplissage
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage whereUpdatedAt($value)
 */
	class Remplissage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Section
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $id_type_section
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @property-read \App\Models\TypeSection|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section query()
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereIdTypeSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereUpdatedAt($value)
 */
	class Section extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeParameter
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TypeSection[] $typeSections
 * @property-read int|null $type_sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter whereUpdatedAt($value)
 */
	class TypeParameter extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeSection
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TypeParameter[] $parametres
 * @property-read int|null $parametres_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection whereUpdatedAt($value)
 */
	class TypeSection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

