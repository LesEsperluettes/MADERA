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
 * @property string $numero_telephone
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
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereNumeroTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePrenom($value)
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
 * @property int $famille_composant_id
 * @property int $fournisseur_id
 * @property-read \App\Models\FamilleComposants|null $familleComposant
 * @property-read \App\Models\Fournisseur|null $fournisseur
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Composant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereFamilleComposantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereFournisseurId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereId($value)
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
 * @property int $client_id
 * @property-read \App\Models\Client|null $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Facturation[] $facturations
 * @property-read int|null $facturations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Devis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis query()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereId($value)
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
 * @property float $pourcentage_demande
 * @property float $pourcentage_paye
 * @property int $devis_id
 * @property-read \App\Models\Devis|null $devis
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereDevisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation wherePourcentageDemande($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation wherePourcentagePaye($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereUpdatedAt($value)
 */
	class Facturation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FamilleComposants
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Composant[] $composants
 * @property-read int|null $composants_count
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposants newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposants newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposants query()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposants whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposants whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposants whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposants whereUpdatedAt($value)
 */
	class FamilleComposants extends \Eloquent {}
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
 * @property string $numero_telephone
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Composant[] $composants
 * @property-read int|null $composants_count
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fournisseur whereNumeroTelephone($value)
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
 * @property int $isolant_id
 * @property int $couverture_id
 * @property int $qualite_huisserie_id
 * @property int $ossature_bois_id
 * @property int $finition_id
 * @property int $composant_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereComposantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereCouvertureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereFinitionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereIsolantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereOssatureBoisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereQualiteHuisserieId($value)
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
 * @property int $remplissage_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Devis[] $devis
 * @property-read int|null $devis_count
 * @property-read \App\Models\Gamme|null $gamme
 * @property-read \App\Models\Remplissage|null $remplissage
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereGammeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereMargeCommerciale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePrixBase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereRemplissageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereUpdatedAt($value)
 */
	class Module extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ModulesDevis
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $devis_id
 * @property int $module_id
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis query()
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis whereDevisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis whereModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModulesDevis whereUpdatedAt($value)
 */
	class ModulesDevis extends \Eloquent {}
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
 * @property int $type_section_id
 * @property int $module_id
 * @property-read \App\Models\Module|null $module
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SectionParametre[] $parametres
 * @property-read int|null $parametres_count
 * @property-read \App\Models\TypeSection|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Section query()
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereModuleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereTypeSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Section whereUpdatedAt($value)
 */
	class Section extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SectionParametre
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $valeur
 * @property int $section_id
 * @property int $type_parametre_id
 * @property-read \App\Models\Module|null $module
 * @property-read \App\Models\TypeParametre|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|SectionParametre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionParametre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionParametre query()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionParametre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionParametre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionParametre whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionParametre whereTypeParametreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionParametre whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionParametre whereValeur($value)
 */
	class SectionParametre extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeParametre
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Section[] $sections
 * @property-read int|null $sections_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TypeSection[] $typeSections
 * @property-read int|null $type_sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParametre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParametre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParametre query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParametre whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParametre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParametre whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParametre whereUpdatedAt($value)
 */
	class TypeParametre extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TypeSection
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TypeParametre[] $parametres
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
 * App\Models\TypeSectionParameter
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $type_section_id
 * @property int $type_parametre_id
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSectionParameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSectionParameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSectionParameter query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSectionParameter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSectionParameter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSectionParameter whereTypeParametreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSectionParameter whereTypeSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSectionParameter whereUpdatedAt($value)
 */
	class TypeSectionParameter extends \Eloquent {}
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

